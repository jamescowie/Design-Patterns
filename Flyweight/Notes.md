Regarding Flyweight.
In a real project you may have to write migration scripts to pass products from a legacy database to the your application database,
for example.

If you delegate the creation of this Products to a factory and have the product be created with some basic shared attributes
that common in quite a few products, then if when you call migrate on that Product you can pass the remaining attributes to it.
The factory will check if you have already created a product with those basic attributes and reuse it,
speeding up the creation of objects and optimising the scripting to up to 300% in some cases.