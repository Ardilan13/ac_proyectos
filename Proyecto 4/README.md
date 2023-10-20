En este taller del curso de Nand to Tetris, se explora la intersección entre hardware y software a través del lenguaje de ensamblador del computador Hack. El objetivo es comprender cómo el software puede interactuar directamente con el hardware a un nivel más bajo.

-- Fill:

En el programa `Fill`, se implementa un bucle infinito que monitorea el teclado. Cuando se presiona cualquier tecla, el programa oscurece la pantalla al escribir `-1` en los registros que representan cada píxel. Si no se presiona ninguna tecla, se borra la pantalla escribiendo `0` en esos mismos registros.

- Se utilizan dos registros de 16 bits: A y D.
- Se inicia con la variable `i` en 0.
- Se establece `R0` en 8160, que es el máximo número de píxeles en la pantalla.

El pseudocódigo del programa `Fill` es el siguiente:

1. Inicio del bucle infinito:
   - Si una tecla está presionada, `R1` se establece en 1; de lo contrario, se pone en 0.
2. Bucle para recorrer los píxeles:
   - Mientras `R0 - i` sea mayor que 0, se ejecuta lo siguiente:
     - Si `R1` es verdadero, se escribe 0 en el píxel correspondiente; de lo contrario, se escribe -1.
     - Se incrementa `i` en 1.

-- Mult:

En el programa `Mult`, se calcula el producto de dos números `R0` y `R1` (almacenados en RAM[0] y RAM[1], respectivamente) y se guarda el resultado en `R2` (RAM[2]). Se asume que `R0 ≥ 0`, `R1 ≥ 0`, y `R0 * R1 < 32768`.

El pseudocódigo del programa `Mult` es el siguiente:

1. Se inicializa una variable `sum` en 0 y `i` en 0.

2. Bucle para multiplicar:

   - Mientras `R1 - i` sea mayor que 0, se ejecuta lo siguiente:
     - Se suma `R0` a `sum`.
     - Se incrementa `i` en 1.

3. El resultado final, `sum`, se guarda en `R2`.

En resumen, en el taller 4 de Nand to Tetris se explora la programación a nivel de lenguaje ensamblador del computador Hack. Se implementan dos programas: uno para modificar píxeles en una pantalla y otro para realizar multiplicaciones utilizando únicamente instrucciones de ensamblador. Estos ejercicios ilustran cómo el software puede interactuar directamente con el hardware a través de comandos simples y registros de la máquina Hack.
