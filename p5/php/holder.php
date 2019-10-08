<?php
$LengthConverter = new Func("LengthConverter", function($valNum = null) use (&$document) {
  set(call_method($document, "getElementById", "outputInches"), "innerHTML", to_number($valNum) * 12.0);
});
$LengthConverter2 = new Func("LengthConverter2", function($valNum = null) use (&$document) {
  set(call_method($document, "getElementById", "outputMeters"), "innerHTML", _divide($valNum, 3.2808));
});
$LengthConverter3 = new Func("LengthConverter3", function($valNum = null) use (&$document) {
  set(call_method($document, "getElementById", "outputCm"), "innerHTML", _divide($valNum, 0.032808));
});
$LengthConverter4 = new Func("LengthConverter4", function($valNum = null) use (&$document) {
  set(call_method($document, "getElementById", "outputYrd"), "innerHTML", to_number($valNum) * 0.33333);
});
$LengthConverter5 = new Func("LengthConverter5", function($valNum = null) use (&$document) {
  set(call_method($document, "getElementById", "outputKm"), "innerHTML", _divide($valNum, 3280.8));
});
$LengthConverter6 = new Func("LengthConverter6", function($valNum = null) use (&$document) {
  set(call_method($document, "getElementById", "outputMiles"), "innerHTML", to_number($valNum) * 0.00018939);
});
$weightConverter = new Func("weightConverter", function($valNum = null) use (&$document) {
  set(call_method($document, "getElementById", "outputKilograms"), "innerHTML", _divide($valNum, 2.2046));
});
$weightConverter2 = new Func("weightConverter2", function($valNum = null) use (&$document) {
  set(call_method($document, "getElementById", "outputO"), "innerHTML", to_number($valNum) * 16.0);
});
$weightConverter3 = new Func("weightConverter3", function($valNum = null) use (&$document) {
  set(call_method($document, "getElementById", "outputG"), "innerHTML", _divide($valNum, 0.0022046));
});
$speedConverter = new Func("speedConverter", function($valNum = null) use (&$parseFloat, &$document) {
  $valNum = call($parseFloat, $valNum);
  set(call_method($document, "getElementById", "outputKPH"), "innerHTML", to_number($valNum) * 1.609344);
});
$speedConverter2 = new Func("speedConverter2", function($valNum = null) use (&$parseFloat, &$document) {
  $valNum = call($parseFloat, $valNum);
  set(call_method($document, "getElementById", "outputKnots"), "innerHTML", _divide($valNum, 1.150779));
});
$speedConverter3 = new Func("speedConverter3", function($valNum = null) use (&$parseFloat, &$document) {
  $valNum = call($parseFloat, $valNum);
  set(call_method($document, "getElementById", "outputMach"), "innerHTML", _divide($valNum, 761.207));
});
$report = new Func(function($celsius = null, $fahrenheit = null) use (&$document) {
  set(call_method($document, "getElementById", "result"), "innerHTML", _concat($celsius, "\xC2\xB0C = ", $fahrenheit, "\xC2\xB0F"));
});
set(call_method($document, "getElementById", "f_to_c"), "onclick", new Func(function() use (&$document, &$report) {
  $f = get(call_method($document, "getElementById", "temperature"), "value");
  call($report, _divide((to_number($f) - 32.0), 1.8), $f);
}));
set(call_method($document, "getElementById", "c_to_f"), "onclick", new Func(function() use (&$document, &$report) {
  $c = get(call_method($document, "getElementById", "temperature"), "value");
  call($report, $c, _plus(1.8 * to_number($c), 32.0));
}));
call_method(call($«24», ".js-scroll-trigger"), "click", new Func(function() use (&$«24») {
  call_method(call($«24», ".navbar-collapse"), "collapse", "hide");
}));
call_method(call($«24», "a.js-scroll-trigger[href*=\"#\"]:not([href=\"#\"])"), "click", new Func(function() use (&$location, &$«24») {
  $this_ = Func::getContext();
  if (eq(call_method(get($location, "pathname"), "replace", new RegExp("^/", ""), ""), call_method(get($this_, "pathname"), "replace", new RegExp("^/", ""), "")) && eq(get($location, "hostname"), get($this_, "hostname"))) {
    $target = call($«24», get($this_, "hash"));
    $target = is(get($target, "length")) ? $target : call($«24», _concat("[name=", call_method(get($this_, "hash"), "slice", 1.0), "]"));
    if (is(get($target, "length"))) {
      call_method(call($«24», "html, body"), "animate", new Object("scrollTop", get(call_method($target, "offset"), "top")), 1000.0, "easeInOutExpo");
      return false;
    }
  }
}));