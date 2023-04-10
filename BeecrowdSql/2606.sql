select products.id, products.name from products inner join 
categories on products.id_categories = categories.id where 
lower(categories.name) like 'super%';