const canvas = document.getElementById('drawing')
const ctx = canvas.getContext('2d')

// ctx.fillRect(20, 20, 100, 100)
// ctx.strokeRect(100, 100, 100, 100)
// ctx.clearRect(70, 70, 100, 100) //gomme tout 

// // Exemple de smiley
ctx.beginPath()
ctx.arc(75, 75, 50, 0, Math.PI * 2)
ctx.fillStyle = 'yellow'
ctx.fill()
ctx.moveTo(110,75)
ctx.arc(75, 75, 35, 0, Math.PI )
ctx.moveTo(65,65)
ctx.arc(60,65, 5, 0,Math.PI * 2)
ctx.moveTo(85, 65)
ctx.lineTo(98, 65)
ctx.lineWidth = 4
ctx.strokeStyle = 'dark'
ctx.stroke()
ctx.closePath()


const linearGradient = ctx.createLinearGradient(20,170,120,270)
linearGradient.addColorStop(0,'#ff4757')
linearGradient.addColorStop(1,'#5352ed')
ctx.fillStyle = linearGradient
ctx.fillRect(20,170,100,100)

ctx.shadowColor = 'gray'
ctx.shadowBlur = 25
ctx.shadowOffsetX = 4
ctx.shadowOffsetY = 4
ctx.fillRect(140,170,100,100)



ctx.fillStyle = 'blue'
ctx.strokeStyle = 'red'
ctx.font = '50px segoe UI'
ctx.fillText('lorem ipsum',250,350)
ctx.strokeText('lorem ipsum',250,420)


window.onload = () => {
  const image = new Image(400,400)

  image.onload = () => {
    ctx.drawImage(image,150,450,400,400)
  }
  image.src = 'entete.jpeg'
}


