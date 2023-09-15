Segunda Práctica

En esta practica se desarrollaron las distintas compuertas siguiendo la metodologia del nand2tetris y se implementaron en el lenguaje de programacion HDL.
Se realizaron el siguiente listado de compuertas: HalfAdder, FullAdder, Add16, Inc16 y ALU, en ese orden.

-- HalfAdder: Circuito logico que se utiliza para sumar dos variables, en este caso dos bits, y obtener el resultado de la suma y el acarreo.
![halfAdder](/source/halfAdder.png)
-- FullAdder: Similar al anterior, pero ahora se ecarga de sumar 3 bits o entradas y nos da dos salidas, la suma y el cout o acarreo solo si hay un acarreo.
![fullAdder](/source/fullAdder.png)
-- Add16: circuito aritmetico que suma de dos entradas de 16 bits,esta compuesto por 16 fullAdder conectados que suman bit a bit propagando el acarreo de cada uno al siguiente y nos da dos salidas, la suma de entradas y el acarreo.
![add16](/source/add16.png)
-- Inc16: circuito incrementador que sirve para sumar 1 a una entrada de 16 bits, esta compuesto por un Add16 y un multiplexor que se encarga de elegir entre la entrada y la salida del Add16, es muy util para crear contadores.
![inc16](/source/inc16.png)
-- ALU: es uno de los componentes mas importantes del procesador, se hizo usando el Add16, el Inc16 y el multiplexor, se encarga de realizar operaciones logicas y aritmeticas, en este caso se implementaron las siguientes operaciones: suma, resta, and, or, not, mayor, menor, igual, negativo y cero.
![alu](/source/alu.png)
