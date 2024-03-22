# vilgerCroppie
The application creates a complete solution for custom image cropping within a web interface. Based on Laravel 11, it integrates front-end and back-end technologies to allow users to upload their images, precisely select how they wish to crop them through an interactive interface, and then processes these crops on the server to generate a final image according to the user's specifications. This solution is particularly useful for applications that require a high degree of customization in image presentation, such as social media platforms, content management systems, or web applications that work intensively with visual media.

The Controller receives from jQuery the image path and parameters indicating width, height, x position, and y position. It addresses the aspect ratio in relation to the original image and applies a proportional and exact crop to the original image on the server.

Requirements:

Laravel 11
PHP 8.2
jQuery
Croppie.js
