## Project description:

The project that we worked on is about creating a database program for the company “ Turkey International
Trading”. Turkey International Trading company buys marble from big factories in Turkey and export it to
different countries. This company has been working before using Excel and Word files ,but they required a
database since it would make their job more organized and easier. Basically we had a mission to create a
complete DB that wıll help every department in the company.

## Objectives :

After several meetings with the company’s responsible (after step 1) every tıme we kept them updated on the
progress and we had some requirement’s changes ,sınce they are working with a DB for first time they were not
really clear about what they wanted but since we are depending on Aigle methods to develop our project ,we
could always update the requirement’s list and the ER model and even the UI .
We discussed with them adding the customs section in the application but according to their way of working they
informed us that they are not responsible for it (they are working with another company which apparently deals
with all customs issues and procedures ) .
As well they also wanted a separate section to deal with their stocks and to be able to check the products in there.



## Tools used in the project:

- Using basic tags and new tags in HTML5.

- Professional website design using CSS3 features.

- The use of front-end framework Bootstrap to design responsive sites and applications with all devices or
  what is known as Responsive Design.
  
- Deal with page events in a quick and soft way using the JQuery JavaScript library.

- Communicate with the server using AJAX and JSON technology to organize and transfer data.

- Basic concepts in Object Oriented Programming (OOP) in PHP5.

- Communicate with MySQL database using PDO with PHP5 and SQL.

- Working with MySQL database.




##Requirement Analysis

- Marble types: this would be our main table in the database as long as it would be connected to the two main basic
operations of the company the export and the import , to make a successful export and import operations the
marble types table will includes the names , quantities and of the marble .

- The factories and the customers: we will have a table for each to add specific information about them so that they
would be a main part of the import and export operations and they would be the reference that helps the
company to reach the information about them .
 
- Import orders: this would be proceed by an import table which would be connected to the factories table and the
marble types table.

- Export orders: this would be proceed by an import table which would be connected to the customers table and
the marble types table .

- Customs: according to some rules about trading between countries we realized that we need this table to find the
accurate final price that company gains from selling a product.

- Invoices: they want to be able to check the details of every purchased or sold products including from where they
bought it or to whom they sold it, and the quantity and the price.

- Stocks : they want to have a full control over their stocks including the imported quantities , exported quantities
and available quantities in the stock but also they want to see the pricing details (with and without the TVA ) .

- Users management : the company owner wants to have the access to all profiles of the users and they have the
ability to add a new users or modify their information.

- Access right management : the main user /admin has the control of access rights ( adding rights ,editing rights ,
deleting rights , viewing rights ) for all other users upon all the sections on the website . 



