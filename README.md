# Image Average Color Extractor

A simple, lightweight and fast PHP function that uses the GD library to extract the average color of an image.

## How to use

1. Include the function in your PHP script:
```php
require_once 'imgextractor.php';
```
2. Call the function by passing the path to the image file as the argument:
```php
$avgColor = getAvgColor('path/to/image.<any image extension>');
```
3. The function will return the average color of the image as a hex value, for example: `#ff0000`

## Basic example
```php
<?php
require_once('imgextractor.php');
$img_url ="https://cdn.pixabay.com/photo/2013/07/21/13/00/rose-165819__340.jpg";
?>

<body>
    <img src=<?php echo $img_url; ?>>
    <style>
        body {
            background-color: <?php echo getAvgColor($img_url) ?>;
        }
    </style>
</body>
```

## Note
Keep in mind that this function will return the average color of an image, not the main color. Also it's a simple implementation, it may not be the best solution for all cases.

## Contribution

Feel free to open an issue or a PR if you have any suggestion or modification to the code.

## License
This project is licensed under the MIT License
