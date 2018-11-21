-- lay cac truong productID, productName, listPrice tu bang product neu listprice < 450 , sau do xap xep theo listPrice
-- cac truong productName duoc doi ten thanh name, listPrice thanh price
SELECT productID, productName AS name, listPrice AS price
FROM products
WHERE listPrice < 450
ORDER BY listPrice;
--lay cac truong (productID, productName, listPrice) trong bang product neu listPrice < 450 sau do xapp xep theo listPrice
SELECT productID, productName name, listPrice price
FROM products
WHERE listPrice < 450
ORDER BY listPrice;
-- lay cac truong productID, productName, listPrice tu bang product neu listprice < 450 , sau do xap xep theo listPrice
-- cac truong productName duoc doi ten thanh Product Name, listPrice thanh Price, productID thanh ID
SELECT productID AS "ID", productName AS "Product Name", listPrice AS "Price"
FROM products
WHERE listPrice < 450
ORDER BY listPrice;