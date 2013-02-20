<html>
<head>
  <style text="text/css">
  body {
    font-family: "Helvetica Neue", "Helvetica", "Arial", sans-serif;
    font-size: 14px;
    background: #ffe;
    color: #333;
    padding: 30px;
  }
  
  p {
    line-height: 20px;
  }
  
  .blue { color: #07f; }
  </style>
  <?php
    wp_head();
  ?>
</head>
<body>
<?php
$options    = get_option("mytheme_options");
$heading    = $options["heading"];
$class      = $options["blue"] ? "blue" : "";
$subheading = $options["subheading"];
?>

<h1 class="<?php echo $class; ?>"><?php echo $heading; ?></h1>
<h2><?php echo $subheading; ?></h2>
<p>  Bacon ipsum dolor sit amet ham hock beef tri-tip, ground round kielbasa chicken brisket pork chop pork loin short ribs tongue beef ribs jerky. Chicken corned beef short loin t-bone meatloaf, pork belly meatball leberkas short ribs sausage ribeye pancetta pork. Tail andouille prosciutto short loin. Ball tip tongue pig salami, ribeye tail boudin bacon strip steak. Ball tip pork tri-tip sirloin pork loin beef ribs tenderloin bresaola fatback jerky chuck frankfurter ham doner. Swine meatball ham bacon, pork andouille shoulder venison frankfurter ham hock boudin turkey. T-bone jerky pork belly pancetta sausage rump pork loin, pastrami brisket.</p>

<p>Leberkas tri-tip strip steak, sirloin prosciutto tenderloin pork belly capicola pork loin jerky fatback chuck salami chicken shank. Hamburger ham kielbasa, strip steak bresaola sausage bacon capicola sirloin ball tip. Bresaola brisket pastrami frankfurter, jerky ham kielbasa leberkas shank t-bone rump spare ribs short ribs venison. Short ribs ribeye bresaola fatback tri-tip tongue prosciutto.</p>

<?php
wp_footer();
?>
</body>