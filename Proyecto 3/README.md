Tercera Práctica

En esta practica se desarrolla paso a paso lo que seria una unidad de RAM tambien llamada random access memory, esto mediante chips complejos como registros, RAM8 y RAM64.

- El registro consiste en una entrada de datos, carga y clock. Permite almacenar un bit.
- La RAM8 es una RAM de 8 registros, con 3 entradas de dirección para acceder los 8 registros, datos de entrada/salida y habilitadores de carga/lectura.
- Combinando RAM8 se crea una RAM64, RAM de 64 registros con 6 bits de dirección.Tiene buses de entrada/salida de datos y habilitadores.
- La RAM64 implementa toda la funcionalidad básica de una memoria RAM real a nivel de hardware digital.
- Luego se crea una RAM512, conectando 8 módulos RAM64 para obtener 512 bytes de memoria.
- Combinando RAM512 se construye una RAM4K, con 8 módulos RAM512 para obtener 4096 bytes (4K).
- Finalmente se crea una RAM16K con 4 módulos RAM4K, logrando así 16384 bytes (16K).
- Para construir las RAMs más grandes se reutilizan los módulos RAM más pequeños, demonstrando el concepto de abstracción y escalabilidad.
- La RAM16K contiene toda la memoria requerida para la máquina Hack que se construirá en el curso.

El rol del PC es importante ya que se encarga de mantener la dirección de la siguiente instrucción a ejecutar dentro de la memoria RAM.

Sus funciones principales en este proyecto son:

- Almacenar la dirección de memoria de la siguiente instrucción a ejecutar.
- Incrementar esta dirección en 1 después de cada ciclo.
- Enviar la dirección a la RAM para obtener la instrucción almacenada ahí.
- Reiniciar la dirección a 0 después de llegar al final de la RAM.
- El PC se implementa utilizando los componentes previamente construidos como registro y unidades de incremento.

Esta pieza finaliza la funcionalidad básica de la RAM y el acceso a instrucciones secuenciales necesario para un procesador simple.
