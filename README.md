
## About Project

A portfolio site is a must-have for any professional who wants to showcase their skills, projects, and experience. To create an impressive portfolio site, Laravel and MySQL are two of the best technologies to use in the backend.

Laravel is a popular PHP web application framework that provides an elegant and expressive syntax for building web applications. It comes with a wide range of built-in features, including an ORM, templating engine, and routing system, which make it easy to create robust and scalable web applications.

MySQL is a reliable and widely-used open-source relational database management system that provides fast and efficient data storage for web applications. It is known for its scalability, security, and ease of use, making it a popular choice among web developers.

By using Laravel and MySQL in the backend of your portfolio site, you can create a fast, secure, and responsive web application that showcases your skills and experience. With Laravel's built-in authentication system, you can easily add user authentication and authorization to your portfolio site, making it secure and accessible only to authorized users.

Additionally, you can use Laravel's templating engine to create an intuitive and user-friendly interface for your portfolio site, with features like a responsive design and a user-friendly navigation system. You can also use MySQL to store your projects and work samples, making it easy to update and manage your portfolio as you progress in your career.

In summary, a portfolio site using Laravel and MySQL in the backend is an excellent choice for developers who want to build a high-performance, scalable, and secure web application to showcase their skills and experience. With the right implementation, it can help you stand out from the crowd and land your dream job or clients.


## After Pull

To remove the "public" from the URL of a Laravel application, you can follow these steps:

Open the root directory of your Laravel project using a file manager or terminal.
Locate the .htaccess file in the root directory of your Laravel application. If it does not exist, create a new file with that name.
Edit the .htaccess file and add the following code to it:
<code>
RewriteEngine On
<br>
RewriteRule ^(.*)$ public/$1 [L]
</code>



Save the .htaccess file.
This code will redirect all requests to the public directory, effectively removing the public from the URL. Now you can access your Laravel application without including "public" in the URL.



## Don't forget create .env file after clone project


## License

All Project Created By <a href="https://www.facebook.com/7odan.0">Mahmoud Elnagar</a>

