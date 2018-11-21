-- lay orderID, orderDate, shipDate tu bang orders
SELECT orderID, orderDate, shipDate
FROM orders
-- lay orderID, orderDate, shipDate tu bang orders chi lay cac truong khong co shipDate
SELECT orderID, orderDate, shipDate
FROM orders 
WHERE shipDate IS NULL
-- lay orderID, orderDate, shipDate tu bang orders chi lay cac truong  co shipDate
SELECT orderID, orderDate, shipDate
FROM orders 
WHERE shipDate IS NOT NULL