# Proyecto CRUD en Ubuntu Server

## Descripción

Este proyecto es un CRUD (Crear, Leer, Actualizar, Eliminar) desarrollado en una máquina virtual de VirtualBox utilizando una ISO de Ubuntu Server. Se han utilizado los siguientes lenguajes y tecnologías:

- *PHP*: Para la lógica del servidor y la interacción con la base de datos.
- *CSS y HTML*: Para el diseño y la estructura del frontend.
- *Bootstrap*: Para facilitar el diseño responsivo y atractivo.
- *JavaScript*: Para mejorar la interactividad en el lado del cliente.
- *MariaDB*: Como sistema de gestión de bases de datos.

Este proyecto permite a los usuarios realizar operaciones CRUD en una aplicación web, proporcionando una interfaz amigable y funcional.

## Configuración 
para que tu aplicación funcione correctamente deberas acceder al archivo conexion.php y alli realizar los cambios necesarios para que coincidan con los datos de tu maquina virtual y asi mismo esta te permita usarla satisfactoriamente.


## Instalación

Para instalar este proyecto en tu máquina, sigue estos pasos:

1. *Clona el repositorio:*
   bash
   git clone https://github.com/DanielHernandez-2004/proyectofinalphp.git

	2.	Navega al directorio del proyecto:

cd proyectofinalphp


	3.	Configura la máquina virtual:
	•	Asegúrate de tener instalada VirtualBox.
	•	Crea una nueva máquina virtual y utiliza la ISO de Ubuntu Server para la instalación.
	4.	Instala el servidor web y PHP:

sudo apt update
sudo apt install apache2 php libapache2-mod-php


	5.	Instala MariaDB:

sudo apt install mariadb-server


	6.	Configura la base de datos:
	•	Inicia el cliente de MariaDB:

sudo mysql


	•	Crea una base de datos y un usuario para tu aplicación.

	7.	Copia los archivos del proyecto a la raíz del servidor web:

sudo cp -r * /var/www/html/


	8.	Asegúrate de que los permisos sean correctos:

sudo chown -R www-data:www-data /var/www/html/*


	9.	Reinicia Apache para aplicar los cambios:

sudo systemctl restart apache2


	10.	Accede a la aplicación:
Abre tu navegador web y visita http://<tu_direccion_ip>/.

Uso

Una vez instalado, puedes comenzar a utilizar el CRUD para gestionar tus datos de manera sencilla y eficiente.

