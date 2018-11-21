--lay tat ca san pham trong bang product 
SELECT * FROM products;
-- lay cac truong (productID, productName, listPrice) trong bang product sau do xap xep theo listPrice
SELECT productID, productName, listPrice
FROM products
ORDER BY listPrice;
--lay cac truong (productID, productName, listPrice) trong bang product neu listPrice < 450 sau do xapp xep theo listPrice
SELECT productID, productName, listPrice
FROM products
WHERE listPrice < 450
ORDER BY listPrice;
-- lay cac truong (productID, productName, listPrice) trong bang product neu listPrice < 1
SELECT productID, productName, listPrice
FROM products
WHERE listPrice < 10;


