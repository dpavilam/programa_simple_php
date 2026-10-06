📦 Product App – Aplicación Simple en PHP
Una aplicación sencilla desarrollada en PHP que demuestra los fundamentos de la programación orientada a objetos: clases, atributos, constructores, métodos e instanciación de objetos.
El proyecto implementa un pequeño sistema de gestión de productos con cálculo de precios e IVA.

🚀 Características principales
Declaración de clases en PHP

Uso de atributos privados

Constructor para inicializar objetos

Métodos para procesar y mostrar información

Instanciación de múltiples objetos

Separación de archivos siguiendo buenas prácticas

Código claro y fácil de extender

🧩 Estructura del proyecto
Código
product-app/
│
├── Product.php      # Clase principal del sistema
└── index.php        # Punto de entrada de la aplicación
🐘 Tecnologías utilizadas
PHP 8+

Servidor local: XAMPP, WAMP, Laragon o cualquier entorno compatible

Navegador web

📄 Descripción de archivos
Product.php
Contiene la clase Product, con:

Atributos: nombre, precio y categoría

Constructor para inicializar los valores

Método priceWithTax() para calcular el precio con IVA

Método showInfo() para mostrar la información del producto

index.php
Archivo principal donde:

Se importan las clases

Se crean objetos de tipo Product

Se ejecutan los métodos para mostrar la información

▶️ Cómo ejecutar el proyecto
Instala un servidor local como XAMPP o WAMP.

Copia la carpeta del proyecto dentro de:

Código
C:\xampp\htdocs\
Inicia Apache desde el panel de control.

Abre en tu navegador:

Código
http://localhost/product-app/index.php
📚 Ejemplo de salida
La aplicación mostrará información similar a:

Código
Producto: Laptop Lenovo
Categoría: Tecnología
Precio base: $15000
Precio con IVA: $17400
🛠️ Cómo extender el proyecto
Puedes agregar fácilmente:

Formulario HTML para registrar productos

Conexión a base de datos MySQL

Clase Inventory para manejar listas de productos

Interfaz gráfica con Bootstrap

API REST en PHP

📜 Licencia
Este proyecto puede utilizarse con fines educativos, académicos o de demostración.
Si deseas agregar una licencia formal (MIT, Apache 2.0, GPL), puedo generarla.

🤝 Contribuciones
Las contribuciones son bienvenidas.
Puedes abrir un issue o enviar un pull request si deseas mejorar el proyecto.
