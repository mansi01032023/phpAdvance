function upperCase() {
  let sentence = $("#sentence").val();
  $.ajax({
    url: "handler.php",
    data: { sentence: sentence, function: "upperCase" },
    datatype: JSON,
    type: "POST",
  }).done(function (result) {
    $("#newSentence").val(result);
  });
}
function lowerCase() {
  let sentence = $("#sentence").val();
  $.ajax({
    url: "handler.php",
    data: { sentence: sentence, function: "lowerCase" },
    datatype: JSON,
    type: "POST",
  }).done(function (result) {
    $("#newSentence").val(result);
  });
}
function removeSpecial() {
  let word = $("#specialCharacters").val();
  $.ajax({
    url: "handler.php",
    data: { word: word, function: "removeSpecial" },
    datatype: JSON,
    type: "POST",
  }).done(function (result) {
    $("#result").val(result);
  });
}
function exchangeCurrency() {
  let fromCurrency = $("#fromCurrency").val();
  let toCurrency = $("#toCurrency").val();
  let amount = $("#amount").val();
  if (amount > 0) {
    if (fromCurrency == toCurrency) {
      $("#results").html(amount);
    } else {
      $.ajax({
        url: "currencyConverter.php",
        type: "post",
        data: {
          fromCurrency: fromCurrency,
          toCurrency: toCurrency,
          amount: amount,
        },
        datatype: JSON,
        success: function (result) {
          $("#results").html(result);
        },
      });
    }
  }
}

function interChangeCurrency() {
  let fromCurrency = $("#fromCurrency").val();
  $("#fromCurrency").val($("#toCurrency").val());
  $("#toCurrency").val(fromCurrency);
  exchangeCurrency();
}

function changeProduct() {
  let val = $("#productItem").val();
  $.ajax({
    url: "advancearray.php",
    data: { text: val, action: "changeItem" },
    type: "post",
    datatype: "text",
    success: function (value) {
      $("#items").html(value);
    },
  });
}
function changeItems() {
  let val = $("#productItem").val();
  let val1 = $("#items").val();
  $.ajax({
    url: "advancearray.php",
    data: { text: val, action: "changeItemsValue", text1: val1 },
    type: "post",
    datatype: "text",
    success: function (value) {
      $("#idValue").html(value);
    },
  });
}

function showItems() {
  let val = $("#productItem").val();
  let val1 = $("#items").val();
  let val2 = $("#idValue").val();
  $.ajax({
    url: "advancearray.php",
    data: { text: val, action: "showTable", text1: val1, text2: val2 },
    type: "post",
    datatype: "text",
    success: function (value) {
      $("#tableDetail").html(value);
    },
  });
}
