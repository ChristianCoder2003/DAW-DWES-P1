## P1: Introducción a PHP
### Explicación:
Para realizar el segundo ejercicio de esta práctica, 
he declarado las variables 'shopping_cart', que guarda el
precio de tu compra en PcComponentes, 'tipo', que indica el
tipo de artilugio comprado (cables o periférico), y
'shipping_price', asignada al valor de los gastos de envío.

Para implementar la parte lógica, he utilizado múltiples ifs
y else ifs para poder abarcar todo el rango de valores demandado
en el precio de compra y los gastos de envío, además de los
dos tipos de objetos que puedes comprar. Además, he optado por
utilizar los operaadores lógicos de <= y >, ya que así no excluimos
ningún valor, como se puede observar en el primer if (<=20) no
excluimos el valor 20). 

Cada vez que necesitamos añadir gastos de envío, modificamos el
valor de su variable y después la mostramos por pantalla.