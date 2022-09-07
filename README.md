EVALUACIÓN TÉCNICA NUXIBA

Prueba: DESARROLLADOR DE INTEGRACIONES

Deadline: 1 día

Nombre: Jorge Juan Romero sanchez
Clona y crea tu repositorio para la evaluación

    Clona este repositorio en tu máquina local
    Crear un repositorio público en tu cuenta personal de GitHub, BitBucket o Gitlab
    Cambia el origen remoto para que apunte al repositorio público que acabas crear en tu cuenta
    Coloca tu nombre en este archivo README.md, haz un commit y realiza un push al repositorio remoto

Prueba

    Lee la documentación del API de JSONPlaceholder y crea una aplicación web en PHP que realice lo siguiente:
        Obtén los 10 usuarios del API y mustralos en una lista (15 puntos)
        Al seleccionar un usuario muestra algunos campos con su información (name, username, email, etc.) y coloca 2 botones para poder seleccionar los "posts" y "todos" que estén relacionados con el usuario. (20 puntos)
        Al dar click en el botón de "posts" se deberán mostrar todas las publicaciones que ha realizado el usuario, cada publicación deberá tener anidados sus comentarios. (20 puntos)
        Al dar click en el botón de "todos" se deberán mostrar las tareas del usuario ordenadas por la propiedad "id" de mayor a menor. (20 puntos)
        En la sección de "todos", crea un formulario para poder agregar una nueva tarea al usuario, este debe de contener una caja de texto (title), un checkbox (completed) y un botón de guardar. Al dar click en el botón, manda la información necesaria al API con el método HTTP correcto para que la tarea quede guardada. (25 puntos)

    Nota: al hacer la petición de guardado de la nueva tarea, el API no la guardará y solo regresará un objeto JSON con la propiedad id de la nueva tarea agregada (id: 201), esto indica que todo se realizó de forma correcta 

Algunos endpoints que puedes utilizar:

    https://jsonplaceholder.typicode.com/users
    https://jsonplaceholder.typicode.com/users/(userId)
    https://jsonplaceholder.typicode.com/users/(userId)/posts
    https://jsonplaceholder.typicode.com/post/(postId)/comments
    https://jsonplaceholder.typicode.com/users/(userId)/todos

Objeto que espera el servidor para guardar la nueva tarea:

{
  "userId": <int>,
  "title": <string>
  "completed": <bool>
}

PLUS: Si conoces algún patrón de diseño de software no dudes en usarlo (+ 10 puntos)
Realiza el commit y push de tu código y compártenos el link a tu repositorio remoto 😊

Si tienes alguna duda sobre la evaluación puedes mandar un correo electrónico a racevedo@nuxiba.com

Manda la liga de tu repositorio público a talento@nuxiba.com
