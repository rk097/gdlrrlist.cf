  var levelPos = []; //0 based
  var allPersonArray = [];
fetch("JS/levellist.json")
.then(function (response) {
    return response.json();
})
.then(function (data) {
  let list = data;
  for(let i = 0; i < list.levels.length; i++){
    let myObj = {
      name:list.levels[i],
      pos:i+1,
      req:100
    };
    levelPos.push(myObj);
    //console.log(levelPos[i].name);
  }
  loadAllPlayers();
  run();
})
.catch(function (err) {
  console.log(err);
});

function loadAllPlayers(){
  //console.log("Loaded");
  fetch("JS/leaderboard.json")
  .then(function (response){
    //console.log("Fetched");
    return response.json();
  })
  .then(function (data){
    for(const key in data){
      let myPlayer = data[key];
      let levels = myPlayer.levels;
      //console.log(levels[0]);
      let progs = myPlayer.progs;
      let myObj = {
        name:key,
        levels:levels,
        progs:progs
      };
      allPersonArray.push(myObj);
      //console.log(myObj.levels[0]);
    }
  })
  .catch(function (err){
    console.log(err);
  })
}

function run(){
  fetch("JS/mainlist.json")
  .then(function (response){
    //console.log("retrieved");
    return response.json();
  })
  .then(function (dataFour) {
    let count = 0;
    for(const key in dataFour){
      if(count > 74) break;
      let thisLevel = dataFour[key];
      levelPos[count].req = thisLevel.minimumPercent;
      count++;
    }
    run2();
  })
  .catch(function (err) {
    console.log(err);
  });
}

function run2(){
  let player = [];
  let playerpoints = [];
  let notice = prompt("This tool is best used with the console of the inspect element feature (open it with ctrl + shift + i). Hit ok or cancel to close this notice");
  while(true){
    let choice = prompt("What would you like to do? Type level to add a level, progress to add a progress, load to load up an existing player's stats, edit to edit a level that you have already entered, or hit cancel to get your results. everything must be typed in lower case only.");
    if(choice == "level"){
      let level = prompt("What level would you like to add? Level names are case sensitive, please type them in exactly as they are spelled on the website. Hit cancel to go back");
      if(level == null) continue;
      let repeat = false;
      for(let i = 0; i < player.length; i++){
        if(player[i].name == level){
          repeat = true;
          break;
        }
      }
      if(repeat == true){
        console.log("You cannot beat the same level twice.");
        continue;
      }
      let valid = false;
      for(let i = 0; i < levelPos.length; i++){
        if(levelPos[i].name == level){
          valid = true;
          let score = 0;
          if(i < 50){
            score = 50.0 / (Math.pow(Math.E, 0.001 * levelPos[i].pos)) * Math.log((1 / (0.008 * levelPos[i].pos)));
          }else if(i >= 50 && i < 100){
            score = 50.0 / (Math.pow(Math.E, 0.01 * levelPos[i].pos)) * Math.log((210 / (Math.pow(levelPos[i].pos, 1.001))));
          }else{
            score = 50.0 / (Math.pow(Math.E, 0.01 * levelPos[i].pos)) * Math.log((3.3 / (Math.pow(levelPos[i].pos, .1))));
          }
          let myObj = {
            name:level,
            pos:levelPos[i].pos,
            score:score,
            percent:100
          };  
          player.push(myObj);
          playerpoints.push(score);
          console.log("Level has been added successfully.");
          break;
        }
      }
      if(valid == false) console.log("That level was not found, please try again.");
    }else if(choice == "progress"){
      let level = prompt("What level would you like to add? Level names are case sensitive, please type them in exactly as they are spelled on the website. Hit cancel to go back");
      if(level == null) continue;
      let progstr = prompt("What percent did the player get on this level? Please enter numbers only, don't enter a % sign or any words. Number should be between the minimum percent and 100 percent. Hit cancel to go back");
      if(progstr == null) continue;
      let progress = parseInt(progstr);
      let isNumber = false;
      for(let i = 1; i <= 100; i++){
        if(progress == i){
          isNumber = true;
          break;
        }
      }
      if(!isNumber){
        console.log("That is not a valid number.");
        continue;
      }
      if(progress == 100){
        console.log("That is too large");
        continue;
      }
      let repeat = false;
      for(let i = 0; i < player.length; i++){
        if(player[i].name == level){
          repeat = true;
          break;
        }
      }
      if(repeat == true){
        console.log("That level has already been entered. Please restart to try again.");
        continue;
      }
      let valid = false;
      for(let i = 0; i < levelPos.length; i++){
        if(i > 74){
          valid = true;
          console.log("This level does not seem to be in the top 75, please try again.");
          break;
        }
        if(levelPos[i].name == level){
          //console.log(levelPos[i].name);
          //console.log(levelPos[i].req);
          if(levelPos[i].req > progress){
            valid = true;
            console.log("That percent does not meet the minimum percentage requirement for this level. Please try again.");
            break;
          }
          valid = true;
          let score = 0;
          if(i < 50) score =  50.0 / (Math.pow(Math.E, 0.001 * levelPos[i].pos)) * Math.log((1 / (0.008 * levelPos[i].pos)));
          else score = 50.0 / (Math.pow(Math.E, 0.01 * levelPos[i].pos)) * Math.log((210 / (Math.pow(levelPos[i].pos, 1.001))));
          let req = levelPos[i].req;
          score = score * (Math.pow(5, ((progress - req)/(100-req)))/10);
          let myObj = {
            name:level,
            pos:levelPos[i].pos,
            score:score,
            percent:progress
          };  
          player.push(myObj);
          playerpoints.push(score);
          console.log("Progress has been added successfully.");
          break;
        }
      }
      if(valid == false) console.log("That level was not found, please try again.");
    }else if(choice == "load"){
      let playerName = prompt("Enter the name of the player who you would like to load (please type in their name exactly):");
        let valid = false;
        //console.log(allPersonArray.length);
        for(let a = 0; a < allPersonArray.length; a++){
          //console.log(allPersonArray[a].name);
          if(playerName == allPersonArray[a].name){
            valid = true;
            player = [];
            playerpoints = [];
            //let playerLevels = data[key];
            for(let i = 0; i < allPersonArray[a].levels.length; i++){
              for(let j = 0; j < levelPos.length; j++){
                if(levelPos[j].name == allPersonArray[a].levels[i]){
                  let score = 0;
                  if(j < 50){
                    score = 50.0 / (Math.pow(Math.E, 0.001 * levelPos[j].pos)) * Math.log((1 / (0.008 * levelPos[j].pos)));
                  }else if(j >= 50 && j < 100){
                    score = 50.0 / (Math.pow(Math.E, 0.01 * levelPos[j].pos)) * Math.log((210 / (Math.pow(levelPos[j].pos, 1.001))));
                  }else{
                    score = 50.0 / (Math.pow(Math.E, 0.01 * levelPos[j].pos)) * Math.log((3.3 / (Math.pow(levelPos[j].pos, .1))));
                  }
                  let myObj = {
                    name:allPersonArray[a].levels[i],
                    pos:levelPos[j].pos,
                    score:score,
                    percent:100
                  };  
                  player.push(myObj);
                  playerpoints.push(score);
                  //console.log("Level has been added successfully.");
                  break;
                }
              }
            }
            for(let i = 0; i < allPersonArray[a].progs.length; i++){
              if(allPersonArray[a].progs[0] == "none") break;
              for(let j = 0; j < levelPos.length; j++){
                if(j > 75) break;
                if(levelPos[j].name == allPersonArray[a].progs[i].name){
                  if(levelPos[j].req > allPersonArray[a].progs[i].percent) break;
                  if(j < 50) score =  50.0 / (Math.pow(Math.E, 0.001 * levelPos[j].pos)) * Math.log((1 / (0.008 * levelPos[j].pos)));
                  else score = 50.0 / (Math.pow(Math.E, 0.01 * levelPos[j].pos)) * Math.log((210 / (Math.pow(levelPos[j].pos, 1.001))));
                  let req = levelPos[j].req;
                  //console.log(score);
                  score = score * (Math.pow(5, ((allPersonArray[a].progs[i].percent - req)/(100 - req)))/10);
                  //console.log(allPersonArray[a].progs[i].percent);
                  let myObj = {
                    name:allPersonArray[a].progs[i].name,
                    pos:levelPos[j].pos,
                    score:score,
                    percent:allPersonArray[a].progs[i].percent
                  };  
                  player.push(myObj);
                  playerpoints.push(score);
                  break;
                }
              }
            }
            console.log(allPersonArray[a].name + "'s stats have been loaded successfully. You may now add to or edit these stats.");
            //console.log(player.length);
            //console.log(playerpoints.length);
            break;
          }
        }
        //console.log(player.length);
        //console.log(playerpoints.length);
        if(valid == false) console.log("That player was not found, please try again.");
    }else if(choice == "edit"){
      if(player.length == 0) console.log("You haven't entered anything yet!");
      else{
        let toUpdate = prompt("Which level would you like to modify the percentage of?");
        let valid = false;
        for(let i = 0; i < player.length; i++){
          if(player[i].name == toUpdate){
            valid = true;
            let newPercent = prompt("What percent would you like to change it to? Do not enter the % sign. Entering 0 will delete the level.");
            newPercent = parseInt(newPercent);
            if(newPercent == 0){
              console.log(player[i].name + " has been removed from your levels list.");
              player.splice(i, 1);
              playerpoints.splice(i, 1);
              break;
            }
            let isNumber = false;
            for(let i = 1; i <= 100; i++){
              if(newPercent == i){
                isNumber = true;
                break;
              }
            }
            if(!isNumber){
              console.log("That is not a valid number.");
              break;
            }
            if(newPercent == 100){
                for(let j = 0; j < levelPos.length; j++){
                    if(levelPos[j].name == player[i].name){
                        player[i].percent = 100;
                        if(j < 50) score =  50.0 / (Math.pow(Math.E, 0.001 * levelPos[j].pos)) * Math.log((1 / (0.008 * levelPos[j].pos)));
                        else score = 50.0 / (Math.pow(Math.E, 0.01 * levelPos[j].pos)) * Math.log((210 / (Math.pow(levelPos[j].pos, 1.001))));
                        player[i].score = score;
                        playerpoints[i] = score;
                        console.log("Percentage updated successfully.");
                        break;
                    }
                }
                break;
            }else{
              for(let j = 0; j < levelPos.length; j++){
                if(levelPos[j].name == player[i].name){
                  if(levelPos[j].req > newPercent){
                    //valid = true;
                    console.log("That percent does not meet the minimum percentage requirement for this level. Please try again.");
                    break;
                  }
                  player[i].percent = newPercent;
                  if(j < 50) score =  50.0 / (Math.pow(Math.E, 0.001 * levelPos[j].pos)) * Math.log((1 / (0.008 * levelPos[j].pos)));
                  else score = 50.0 / (Math.pow(Math.E, 0.01 * levelPos[j].pos)) * Math.log((210 / (Math.pow(levelPos[j].pos, 1.001))));
                  let req = levelPos[j].req;
                  score = score * (Math.pow(5, ((newPercent - req)/(100 - req)))/10);
                  player[i].score = score;
                  playerpoints[i] = score;
                  console.log("Percentage updated successfully.");
                  break;
                }
              }
            }
          }
          if(valid == true) break;
        }
        if(valid == false) console.log("Hmm... it seems that you haven't entered this level yet. Please try again.");
      }
    }
    else if(choice == null){
      player.sort((a, b) => b.score - a.score);
      playerpoints.sort((a, b) => b - a);
      //console.log(player.length);
      //console.log(playerpoints.length);
      let weightedScore = playerpoints.reduce(
      (sum, currentValue, index) => sum + Math.pow(currentValue, Math.pow(0.95, index)),0);
      let webpage = document.getElementById("calc");
      let div = document.createElement("div");
      for(let i = 0; i < player.length; i++){
        let text = document.createElement("p")
        text.innerHTML = `
          ${i + 1}. ${player[i].name} ${player[i].percent}% (#${player[i].pos}) Unweighted score: ${Math.round(1000*player[i].score)/1000}|Truescore: ${Math.round(1000*(Math.pow(playerpoints[i], Math.pow(0.95, i))))/1000}
        `;
        div.appendChild(text);
      }
      let total = document.createElement("h3")
      total.innerHTML = `
        Final (weighted) score: ${Math.round(1000*weightedScore)/1000} points
      `;
      div.appendChild(total);
      webpage.appendChild(div);
      break;
    }else{
      console.log("That is not a valid option, please try again.");
    }
  }
}
