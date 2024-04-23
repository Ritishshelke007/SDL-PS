<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>PHP</title>
</head>
<body>
<?php
$employee_names = array(
    "John",
    "Jane",
    "Michael",
    "Emily",
    "David",
    "Sophia",
    "William",
    "Olivia",
    "Daniel",
    "Emma",
    "Matthew",
    "Ava",
    "Christopher",
    "Mia",
    "Andrew",
    "Ella",
    "James",
    "Grace",
    "Logan",
    "Lily"
);


?>

<div class="centerbox">
  <div class="main-form-container">
    <form id="" class="" method="get" action="">
      <input type="text" class="main-input main-name" name="search_name" placeholder="Search Employee"/>
      
    
      <input id="main-submit" class="" type="submit" value="Search" />
    </form>


  </div>
</div>

<div style="margin-top: 30px; font-size: 25px;">
    <?php

    
// Check if a name exists in the array
if (isset($_GET['search_name'])) {
    $search_name = $_GET['search_name'];
    $result = in_array($search_name, $employee_names);

    if ($result) {
        echo "<p>{$search_name} is an employee.</p>";
    } else {
        echo "<p>{$search_name} is not found in the list of employees.</p>";
    }
}

?>
</div>




</body>

<script>

//Call jQuery before below code
$('.main-btn').click(function() {
  $('.search-description').slideToggle(100);
});
$('.search-description li').click(function() {
  var target = $(this).html();
  var toRemove = 'By ';
  var newTarget = target.replace(toRemove, '');
  //remove spaces
  newTarget = newTarget.replace(/\s/g, '');
  $(".search-large").html(newTarget);
  $('.search-description').hide();
  $('.main-input').hide();
  newTarget = newTarget.toLowerCase();
  $('.main-' + newTarget).show();
});
$('#main-submit-mobile').click(function() {
  $('#main-submit').trigger('click');
});
$(window).resize(function() {
  replaceMatches();
});

function replaceMatches() {
  var width = $(window).width();
  if (width < 516) {
    $('.main-location').attr('value', 'City or postal code');
  } else {
    $('.main-location').attr('value', 'Search by city or postal code');
  }
};
replaceMatches();

function clearText(thefield) {
  if (thefield.defaultValue == thefield.value) {
    thefield.value = ""
  }
}

function replaceText(thefield) {
  if (thefield.value == "") {
    thefield.value = thefield.defaultValue
  }
}
</script>
</html>