var yoff = 0.0; // 2nd dimension of perlin noise
var yoff_2 = 0.0; // 2nd dimension of perlin noise

var sketch = function(can1) {
    can1.setup = function() {
        can1.createCanvas(can1.windowWidth, 800);
    }

    can1.draw = function() {
        can1.noStroke();
        can1.fill(255,200,84,255);
        can1.rect(0,0, can1.windowWidth, can1.windowHeight);
        can1.waveDraw(0, 173, 93, 255, 0.02, 0.01, 200, 300);
    }

    can1.waveDraw = function(r, g, b, o, Vx, Vy, maxWidth, maxHeight) {
        can1.fill(r, g, b, o);
        // can1.rect(255,255,can1.windowWidth, can1.windowHeight);
        //stroke(0,10);
    
        can1.beginShape();
        var xoff = 0; // Option #1: 2D Noise
        
    
        // Iterate over horizontal pixels
        for (var x = 0; x <= can1.width + 10; x += 10) {
            // X value = Wave frequency control.
            // width + 10 -> because , last point isn't filled.
            // Calculate a y value according to noise, map to 
    
            // Option #1: 2D Noise
            var y = can1.map(can1.noise(xoff, yoff), 0, 1, maxWidth, maxHeight);
    
            // Set the vertex
            can1.vertex(x, y);
            // Increment x dimension for noise
            xoff += Vx;
        }
        // increment y dimension for noise
        yoff += Vy;
        can1.vertex(can1.width, can1.height);
        can1.vertex(0, can1.height);
        can1.endShape(can1.CLOSE);
    }
}

var sketch2 = function(can1) {
    can1.setup = function() {
        can1.createCanvas(can1.windowWidth, 400);
    }

    can1.draw = function() {
        can1.noStroke();
        can1.fill(255);
        can1.rect(0,0, can1.windowWidth, can1.windowHeight);
        can1.waveDraw(255, 200, 84, 255, 0.005, 0.001, 200, 60);
    }

    can1.waveDraw = function(r, g, b, o, Vx, Vy, maxWidth, maxHeight) {
        can1.fill(r, g, b, o);
        // can1.rect(255,255,can1.windowWidth, can1.windowHeight);
        //stroke(0,10);
    
        can1.beginShape();
        var xoff = 0; // Option #1: 2D Noise
        
    
        // Iterate over horizontal pixels
        for (var x = 0; x <= can1.width + 10; x += 10) {
            // X value = Wave frequency control.
            // width + 10 -> because , last point isn't filled.
            // Calculate a y value according to noise, map to 
    
            // Option #1: 2D Noise
            var y = can1.map(can1.noise(xoff, yoff), 0, 1, maxWidth, maxHeight);
    
            // Set the vertex
            can1.vertex(x, y);
            // Increment x dimension for noise
            xoff += Vx;
        }
        // increment y dimension for noise
        yoff_2 += Vy;
        can1.vertex(can1.width, can1.height);
        can1.vertex(0, can1.height);
        can1.endShape(can1.CLOSE);
    }
}

new p5(sketch, 'my-sketch');
new p5(sketch2, 'sketchYellowGround');
new p5(sketch2, 'sketchYellowGroundSeed');

