// wound area
const radioButtons1 = document.querySelectorAll('input[name="wound_area"]');
for (const radioButton1 of radioButtons1) {
    radioButton1.addEventListener('change', showSelected1);
}

function showSelected1 () {
    // console.log(e);
    if (this.checked) {
      document.querySelector('#wound_area').innerHTML = `${this.value}`;
    }
}

// contamination
const radioButtons2 = document.querySelectorAll('input[name="contamination"]');
for (const radioButton2 of radioButtons2) {
    radioButton2.addEventListener('change', showSelected2);
}

function showSelected2 (e) {
    console.log(e);
    if (this.checked) {
      document.querySelector('#contamination').innerHTML = `${this.value}`;
    }
}

// look
const radioButtons3 = document.querySelectorAll('input[name="look"]');
for (const radioButton3 of radioButtons3) {
    radioButton3.addEventListener('change', showSelected3);
}

function showSelected3 (e) {
    console.log(e);
    if (this.checked) {
      document.querySelector('#look').innerHTML = `${this.value}`;
    }
}

// wound_nature
const radioButtons4 = document.querySelectorAll('input[name="wound_nature"]');
for (const radioButton4 of radioButtons4) {
    radioButton4.addEventListener('change', showSelected4);
}

function showSelected4 (e) {
    console.log(e);
    if (this.checked) {
      document.querySelector('#wound_nature').innerHTML = `${this.value}`;
    }
}

// wound_shape
const radioButtons5 = document.querySelectorAll('input[name="wound_shape"]');
for (const radioButton5 of radioButtons5) {
    radioButton5.addEventListener('change', showSelected5);
}

function showSelected5 (e) {
    console.log(e);
    if (this.checked) {
      document.querySelector('#wound_shape').innerHTML = `${this.value}`;
    }
}

// wound_shape
const radioButtons6 = document.querySelectorAll('input[name="wound_color"]');
for (const radioButton6 of radioButtons6) {
    radioButton6.addEventListener('change', showSelected6);
}

function showSelected6 (e) {
    console.log(e);
    if (this.checked) {
      document.querySelector('#wound_color').innerHTML = `${this.value}`;
    }
}
