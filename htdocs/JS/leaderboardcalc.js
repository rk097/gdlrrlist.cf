var levelPos = [];
  fetch("/JS/levellist.json")
  .then(function (response) {
    return response.json();
  })
  .then(function (dataThree) {
    let list = dataThree;
    for(let i = 0; i < list.levels.length; i++){
      let myObj = {
        name:list.levels[i],
        pos:i+1,
        req:100
      };
      levelPos.push(myObj);
      //console.log(levelPos[i].name);
      //console.log(levelPos[i].pos);
      //console.log(levelPos.length);
    }
    console.log("A");
  })
  .then(function (dataThree){
    fetch("/JS/mainlist.json")
    .then(function (response){
      return response.json();
    })
    .then(function (dataFour) {
      let count = 0;
      for(const key in dataFour){
        if(count > 50) break;
        let thisLevel = dataFour[key];
        levelPos[count].req = thisLevel.minimumPercent;
        //console.log(levelPos[count].req);
        //console.log(dataFour[key].minimumPercent);
        count++;
      }
      console.log("B");
    })
    .then(function (dataFour){
      fetch("/JS/leaderboard.json")
      .then(function (response) {
        return response.json();
      })
      .then(function (dataTwo) {
        appendDataTwo(dataTwo);
        console.log("C");
      })
      .catch(function (err) {
        console.log(err);
      });
    })
    .catch(function (err) {
      console.log(err);
    });
  })
  .catch(function (err) {
    console.log(err);
  });
/*
  fetch("levels.json")
  .then(function (response){
    return response.json();
  })
  .then(function (dataFour) {
    let count = 0;
    for(const key in dataFour){
      if(count > 50) break;
      let thisLevel = dataFour[key];
      levelPos[count].req = thisLevel.minimumPercent;
      //console.log(levelPos[count].req);
      //console.log(dataFour[key].minimumPercent);
      count++;
    }
    console.log("B");
  })
  .catch(function (err) {
    console.log(err);
  });

fetch("leaderboard.json")
  .then(function (response) {
    return response.json();
  })
  .then(function (dataTwo) {
    appendDataTwo(dataTwo);
    console.log("C");
  })
  .catch(function (err) {
    console.log(err);
  });
*/
  //var subarray = [];
function appendDataTwo(dataTwo) {
  let allPersonArray = [];
  
  let leaderboard = document.getElementById("leaderboard");
  let div = document.createElement("div");
  //let c = 0;
  let order = 0;
  // get stuff
  for (const key in dataTwo) {
    let person = dataTwo[key];
    let thisPersonsLevels = [];
    //console.log("?");
    //exclude position > 100
    //let mainlistSize = 0;

    for (let i = 0; i < person.levels.length; i++){
      let thisLevelPos = 1;
      for(let j = 0; j < levelPos.length; j++){
        if(person.levels[i] == levelPos[j].name){
          thisLevelPos = levelPos[j].pos;
          break;
        }
      }
      //if(thisLevelPos <= 100) mainlistSize++;
      let myObj = {
        name:person.levels[i],
        pos:thisLevelPos
      };
      thisPersonsLevels.push(myObj);
    }
    thisPersonsLevels.sort((a, b) => a.pos - b.pos);
    //subarray[c] = new Array(person.levels.length);
    //let ischeck = false;
    /*
    for(let i = 0; i < person.levels.length; i++){
      if(person.levels[i].position > 100){
        mainlistSize = i;
        //ischeck = true;
        break;
      }
      //subarray[c][i].push(person.levels[i]);
    }*/
    // Formula for the points
    let numberOfRecords = person.levels.length;
    if(person.progs[0] != "none") numberOfRecords += person.progs.length;

    let allBasePoints = new Array(numberOfRecords);
    for (let i = 0; i < person.levels.length; i++) {
      /*
      let thisLevelPos = 1;
      for(let j = 0; j < levelPos.length; j++){
        if(person.levels[i] == levelPos[j].name){
          thisLevelPos = levelPos[j].pos;
          break;
        }
      }*/
      //console.log(thisLevelPos);
      //console.log(levelPos.length);
      //if(thisPersonsLevels[i].pos > 100) break;
      if(thisPersonsLevels[i].pos <= 100){
        allBasePoints[i] =  50.0 / (Math.pow(Math.E, 0.01 * thisPersonsLevels[i].pos)) * Math.log((1 / (0.008 * thisPersonsLevels[i].pos)));
      }else{
        allBasePoints[i] = 11.0 / (Math.pow(Math.E, 0.01 * thisPersonsLevels[i].pos));
      }
      /*
      if(key == "Luqualizer"){
        console.log(thisPersonsLevels[i].name);
        console.log(allBasePoints[i]);
      }*/
    }
    //handles progresses
    if(person.progs[0] != "none" && person.progs.length > 0){
      let thisPersonsProgs = [];
      for (let i = 0; i < person.progs.length; i++){
      let thisLevelPos = 1;
      for(let j = 0; j < levelPos.length; j++){
        if(person.progs[i].name == levelPos[j].name){
          thisLevelPos = levelPos[j].pos;
          break;
        }
      }
      let myObj = {
        name:person.progs[i].name,
        percent:person.progs[i].percent,
        pos:thisLevelPos
      };
      thisPersonsProgs.push(myObj);
    }
    thisPersonsProgs.sort((a, b) => a.pos - b.pos);
    //console.log(thisPersonsProgs[0].pos);
      for (let i = 0; i < thisPersonsProgs.length; i++){
        if(thisPersonsProgs[i].pos > 50) break;
        allBasePoints[i+person.levels.length] =  50.0 / (Math.pow(Math.E, 0.01 * thisPersonsProgs[i].pos)) * Math.log((1 / (0.008 * thisPersonsProgs[i].pos)));
        //reduce based on percent, ripped from here: https://www.desmos.com/calculator/wwkimnpeqw
        let thisLevelReq = levelPos[thisPersonsProgs[i].pos-1].req;
        //console.log(thisLevelReq);
        //console.log(levelPos[thisPersonsProgs[i].pos-1].name);
        //console.log(person.progs[i].percent);
        allBasePoints[i+person.levels.length] = allBasePoints[i+person.levels.length] * (Math.pow(5, ((thisPersonsProgs[i].percent - thisLevelReq)/(100-thisLevelReq)))/10);
        //console.log(thisPersonsProgs[i].percent);
        /*
        console.log(levelPos[thisPersonsProgs[i].pos-1].name);
        console.log(thisLevelReq);
        console.log(person.progs[i].percent);
        console.log(allBasePoints[i+mainlistSize]);
        console.log(thisPersonsProgs[i].pos);*/
      }
    }
    // sum + base ^ 0.95 ^ index NOT sum + base * 0.95 ^ index
    allBasePoints.sort((a, b) => b - a);
    
    //console.log(allBasePoints[0]);
    let point = allBasePoints.reduce(
      (sum, currentValue, index) => sum + Math.pow(currentValue, Math.pow(0.95, index)),0);
    //
    let object = {
      name: key,
      score: point,
      readorder: order
    };
    allPersonArray.push(object);
    order++;
  }
  //console.log("HERE!");
  allPersonArray.sort((a, b) => b.score - a.score);

  //cut off leaderboard at zero points
  
  let zeroindex = allPersonArray.length;
  for(let i = 0; i < allPersonArray.length; i++){
    if(allPersonArray[i].score == 0){
      zeroindex = i;
      break;
    }
  }
  //console.log(allPersonArray[0].score);
  //console.log(zeroindex);
  //display tied players with same ranking
  let tiecount = 0;
  let curRank = 0;
  for (let i = 0; i < zeroindex; i++) {
    //let player = document.createElement("div");
    let text = document.createElement("p");
    if(i == 0 || (i == zeroindex - 1 && allPersonArray[i].score != allPersonArray[i-1].score)){
      curRank += tiecount+1;
    }
    else if(i != 0 && allPersonArray[i].score != allPersonArray[i + 1].score && allPersonArray[i].score != allPersonArray[i - 1].score){
      curRank += tiecount + 1;
      tiecount = 0;
    }else if(allPersonArray[i].score != allPersonArray[i-1].score && allPersonArray[i].score == allPersonArray[i+1].score){
      curRank += tiecount + 1;
      tiecount = 0;
    }
    else{
      tiecount++;
    }
    let cursc = `display(${allPersonArray[i].readorder})`;
    text.innerHTML = `
        <p class="trigger_popup_fricc" onclick = "${cursc}"><b>${curRank}:</b> ${allPersonArray[i].name} (${
      Math.round(1000.0*allPersonArray[i].score)/1000.0
    } points)
      `;
      div.appendChild(text);
  }

  leaderboard.appendChild(div);
}

function display(thisuser){
fetch("/JS/leaderboard.json")
  .then(function (response) {
    return response.json();
  })
  .then(function (dataTwo) {
  //console.log(levelPos[0].name);
  //console.log(2);
    let compl = '<ol>';
    let playerProgsList = '<ol>';
    let usersread = 0;
    for(const key in dataTwo){
      //let c = 0;keyperson.name);
      if(usersread == thisuser){
        //console.log("what?");
        let person = dataTwo[key];
        let thisPersonsLevels = [];
        for (let i = 0; i < person.levels.length; i++){
          let thisLevelPos = 1;
          for(let j = 0; j < levelPos.length; j++){
            if(person.levels[i] == levelPos[j].name){
              thisLevelPos = levelPos[j].pos;
              break;
            }
          }
          let myObj = {
            name:person.levels[i],
            pos:thisLevelPos
          };
          thisPersonsLevels.push(myObj);
        }
        thisPersonsLevels.sort((a, b) => a.pos - b.pos);
        for(let i = 0; i < person.levels.length; i++){
         /*
          let thisLevelPos = 0;
          for(let j = 0; j < levelPos.length; j++){
            if(person.levels[i] == levelPos[j].name){
              thisLevelPos = levelPos[j].pos;
              break;
            }
          }*/
          compl+= '<li class = "playerlevelEntry">'+thisPersonsLevels[i].name+' (#'+thisPersonsLevels[i].pos+')</li><br>';
        }
        if(person.levels.length == 0){
          compl = '<p>none</p>'
        }
        if(person.progs[0] != "none" && person.progs.length > 0){
          let thisPersonsProgs = [];
          for (let i = 0; i < person.progs.length; i++){
            let thisLevelPos = 1;
            for(let j = 0; j < levelPos.length; j++){
              if(person.progs[i].name == levelPos[j].name){
                thisLevelPos = levelPos[j].pos;
                break;
              }
            }
            let myObj = {
              name:person.progs[i].name,
              percent:person.progs[i].percent,
              pos:thisLevelPos
            };
            thisPersonsProgs.push(myObj);
          }
          thisPersonsProgs.sort((a, b) => a.pos - b.pos);
          //var hasMainListProgs = true;
          for(let i = 0; i < thisPersonsProgs.length; i++){
            if(thisPersonsProgs[i].pos > 50){
              break;
            }
            playerProgsList+='<li class = "playerlevelEntry">'+thisPersonsProgs[i].name + ' ' + thisPersonsProgs[i].percent + '% (#' + thisPersonsProgs[i].pos + ')</li><br>'; 
          }
        }else{
          playerProgsList = '<p>none</p>';
        }
        if(playerProgsList == '<ol>') playerProgsList = '<p>none</p>';
        Swal.fire({
          html:'<p>Completed levels: </p>' + compl +'</ol>' + '<p>Progresses: </p>' + playerProgsList + '</ol>'
        });
        break;
      }
      usersread++;
    }
  })
  .catch(function (err) {
    console.log(err);
  });
  

}
