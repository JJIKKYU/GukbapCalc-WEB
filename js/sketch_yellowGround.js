var yoff = 0.0; // 2nd dimension of perlin noise
var yoff_2 = 0.0;
var access = 0;
var i = 0;

function setup() {
    let mySketch = createCanvas(windowWidth, 300);
    mySketch.parent('sketchYellowGround');
    
    background(200);
}

function draw() {
    fill(255,200,84,255);
    rect(0, 0, windowWidth, windowHeight);
    noStroke();
    /*
    if (mouseIsPressed) {
        fill(0);
    } else {
        fill(255);
    }
    
    ellipse(mouseX, mouseY, 80, 80);

*/
    // waveDraw(255, 200, 84, 255, 0.002, 0.003, 100, 300);
    waveDraw(0, 173, 93, 255, 0.005, 0.005, 120, 300);
    
}

// waveDraw(R, G, B, Opacity, xOff, yOff, mapWidth, mapHeight)
function waveDraw(r, g, b, o, Vx, Vy, maxWidth, maxHeight) {
	fill(r, g, b, o);
	//stroke(0,10);

	beginShape();

	var xoff = 0; // Option #1: 2D Noise

	// Iterate over horizontal pixels
	for (var x = 0; x <= width + 10; x += 10) {
		// X value = Wave frequency control.
		// width + 10 -> because , last point isn't filled.
		// Calculate a y value according to noise, map to 

		// Option #1: 2D Noise
		var y = map(noise(xoff, yoff), 0, 1, maxWidth, maxHeight);

		// Set the vertex
		vertex(x, y);
		// Increment x dimension for noise
		xoff += Vx;
	}
	// increment y dimension for noise
	yoff += Vy;
	vertex(width, height);
	vertex(0, height);
	endShape(CLOSE);
}