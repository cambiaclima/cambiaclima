const colorUnveiled = "#E5E9EC";
const colorDefault = "#C7CFD6";
const colorHovered = "#E5E9CD";
const mineIMG = new Image();
mineIMG.src = "img/flame.png"; //if on a local server
const flagIMG = new Image();
flagIMG.src = "img/tree.png"; //if on a local server

function colorSelector(zone, n) {
  /* Select the color based on the value */
  let color;

  switch (n) {
    case 0: // background color of the zone
      color = zone.getColor();
      break;
    case 1: // green
      color = "#75BF11";
      break;
    case 2: // old green
      color = "#A4C411";
      break;
    case 3: // yellow lime
      color = "#C9BD11";
      break;
    case 4: // light orange
      color = "#CF9311";
      break;
    case 5: // orange
      color = "#D46711";
      break;
    case 6: // dark orange
      color = "#DA3810";
      break;
    case 7: // red
      color = "#DF101A";
      break;
    case 8: // purple
      color = "#E5104E";
      break;
    default: // black
      color = "#202020";
      break;
  }

  return color;
}

function Zone(x, y, mine, size, value) {
  /* zone of a minesweeper board */
  this.x = x;
  this.y = y;
  this.color = colorDefault; //grey
  this.flag = false;
  this.mine = mine; //true or false
  this.size = size;
  this.value = value;
  this.isUnveiled = false;

  this.getColor = function () {
    /* Return the color of the zone */
    return this.color;
  };

  this.hover = function () {
    /* Update the color of the zone when called */
    this.color = colorHovered;
  };

  this.hasMine = function () {
    /* return true if has mine, false otherwise */
    return this.mine;
  };

  this.unveil = function () {
    /* Returns different scenario when the zone is unveiled */

    this.isUnveiled = true;
    this.color = colorUnveiled;
    this.hasMine();
  };

  this.switchFlag = function () {
    /* when called change this.flag to the opposite value, switching it on and off */
    this.flag = !this.flag;

  };

  this.draw = function (canvas) {
    /* allows the zone to print itself in a canvas */

    let ctx = canvas.getContext("2d");

    //Draw the zone background
    ctx.beginPath();
    ctx.rect(this.x, this.y, Math.floor(size), Math.floor(size));
    ctx.fillStyle = this.color;
    ctx.fill();

    if (this.isUnveiled) {
      //Draw the Text
      ctx.font = String(Math.ceil(this.size - this.size * 0.2)) + "px Arial";
      ctx.textAlign = "left";
      ctx.fillStyle = colorSelector(this, this.value);
      ctx.fillText(
        this.value,
        this.x + this.size * 0.25,
        this.y + this.size * 0.75
      );

      if (this.mine) {
        //Draw the mine
        ctx.drawImage(
          mineIMG,
          this.x + this.size * 0.1,
          this.y + this.size * 0.1,
          this.size * 0.8,
          this.size * 0.8
        );
      }

    } else if (this.flag) {
      //Draw the flag
      ctx.drawImage(
        flagIMG,
        this.x + this.size * 0.2,
        this.y + this.size * 0.1,
        this.size * 0.6,
        this.size * 0.7
      );

    }

    ctx.closePath();

  };

}

/*
    Images are hosted on github, but since the URL takes too
    much place, I've put it at the end. Sometime, the browser
    can't access file from the directory so it won't be able to
    display the images, here are the back up links.
*/

// mineIMG.src = "../img/flame.svg";
// flagIMG.src = "../img/tree.png";
