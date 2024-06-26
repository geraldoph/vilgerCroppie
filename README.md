vilgerCroppie
================

Complete solution for custom image cropping within a web interface. Based on Laravel 11, it integrates front-end and back-end technologies to allow users to upload their images, precisely select how they wish to crop them through an interactive interface, and then processes these crops on the server to generate a final image according to the user's specifications. This solution is particularly useful for applications that require a high degree of customization in image presentation, such as social media platforms, content management systems, or web applications that work intensively with visual media.

The Controller receives from jQuery the image path and parameters indicating width, height, x position, and y position. It addresses the aspect ratio in relation to the original image and applies a proportional and exact crop to the original image on the server.

Requirements
================
- Laravel 11
- Intervention 3
- PHP 8.2
- jQuery
- Croppie.js

```html
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" integrity="sha512-2eMmukTZtvwlfQoG8ztapwAH5fXaQBzaMqdljLopRSA0i6YKM8kBAOrSSykxu9NN9HrtD45lIqfONLII2AFL/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.js" integrity="sha512-vUJTqeDCu0MKkOhuI83/MEX5HSNPW+Lw46BA775bAWIp1Zwgz3qggia/t2EnSGB9GoS2Ln6npDmbJTdNhHy1Yw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
```
