
<?php
  $foods = [
    [
      'name'=>'biriyaani',
      'price'=>150,
      'category'=>'rice',
      'type'=>'chicken tandoor',
      'cuision' =>'indian'
    ],

    
    [
      'name'=>'pizza',
      'price'=>130,
      'category'=>'bake',
      'type'=>'chicken',
      'cuision' =>'italina'
    ],
  
    [
      'name'=>'burger',
      'price'=>110,
      'category'=>'bake',
      'type'=>'chicken',
      'cuision' =>'maldivian'
    ],
    [
      'name'=>'Parata',
      'price'=>9,
      'category'=>'bake',
      'type'=>'buttter',
      'cuision' =>'india'
    ]

  ];
  
    
  
    
  
  
?>

<?php foreach($foods as $food){ ?>
<hr>
<ul>
<li><?php  echo $food["name"]; ?> </li>
<li><?php  echo $food["price"]; ?> </li>
<li><?php  echo $food["category"]; ?> </li>
<li><?php  echo $food["type"]; ?> </li>
<li><?php  echo $food["cuision"]; ?> </li>
</ul>
<?php  } ?>