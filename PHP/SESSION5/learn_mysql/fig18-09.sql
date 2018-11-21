-- lay  firstName, lastName, orderDate tu bang customers sau do join voi bang orders bang truong customerID co tren 2 bang 
-- sau do xap xep theo orderDate

SELECT firstName, lastName, orderDate
FROM customers 
   INNER JOIN orders 
      ON customers.customerID = orders.customerID
ORDER BY orderDate