var report = function (celsius, fahrenheit) {
    document.getElementById("result").innerHTML =
        celsius + "\xb0C = " + fahrenheit + "\xb0F";
};

document.getElementById("f_to_c").onclick = function () {
    var f = document.getElementById("temperature").value;
    report((f - 32) / 1.8, f);
};

document.getElementById("c_to_f").onclick = function () {
    var c = document.getElementById("temperature").value;
    report(c, 1.8 * c + 32);
};

function LengthConverter(valNum) {
  document.getElementById("outputInches").innerHTML=valNum*12;
};

function LengthConverter2(valNum) {
  document.getElementById("outputMeters").innerHTML=valNum/3.2808;
};

function LengthConverter3(valNum) {
  document.getElementById("outputCm").innerHTML=valNum/0.032808;
};

function LengthConverter4(valNum) {
  document.getElementById("outputYrd").innerHTML=valNum*0.33333;
};

function LengthConverter5(valNum) {
  document.getElementById("outputKm").innerHTML=valNum/3280.8;
};

function LengthConverter6(valNum) {
  document.getElementById("outputMiles").innerHTML=valNum*0.00018939;
};

function weightConverter(valNum) {
  document.getElementById("outputKilograms").innerHTML=valNum/2.2046;
};

function weightConverter2(valNum) {
  document.getElementById("outputO").innerHTML=valNum*16;
};

function weightConverter3(valNum) {
  document.getElementById("outputG").innerHTML=valNum/0.0022046;
};

function speedConverter(valNum) {
  valNum = parseFloat(valNum);
  document.getElementById("outputKPH").innerHTML = valNum * 1.609344;
};

function speedConverter2(valNum) {
  valNum = parseFloat(valNum);
  document.getElementById("outputKnots").innerHTML = valNum/1.150779;
};

function speedConverter3(valNum) {
  valNum = parseFloat(valNum);
  document.getElementById("outputMach").innerHTML = valNum/761.207;
};
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });