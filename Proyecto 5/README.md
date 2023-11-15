En este proyecto, se construye una computadora Hack que comprende la CPU, la memoria (RAM, mapa de pantalla y teclado), y la ROM. La CPU ejecuta instrucciones del lenguaje de máquina Hack. La memoria maneja el espacio de direcciones de la RAM y dispositivos de entrada/salida mapeados en memoria.

**Memoria:** Implementa el espacio de direcciones completo, con acceso a la RAM, mapa de pantalla y teclado. Emite valores según la dirección de entrada y establece valores si se indica cargar.

**CPU:** Analiza el código binario de las instrucciones y ejecuta operaciones según la especificación del lenguaje Hack. Lee/escribe valores de la memoria, calcula direcciones siguientes, y controla el flujo de instrucciones.

**Computadora Hack:** Compuesta por CPU, ROM y RAM. Cuando reset es 0, ejecuta el programa almacenado en ROM. Al establecer reset en 1 y luego en 0, se reinicia la ejecución del programa cargado. Dependiendo del código, puede mostrar salidas en la pantalla, solicitar entradas mediante el teclado o realizar procesamiento.

Cada componente desempeña un papel clave en la ejecución y gestión de programas en la computadora Hack, permitiendo la interacción entre el software y el hardware a nivel de lenguaje de máquina.
