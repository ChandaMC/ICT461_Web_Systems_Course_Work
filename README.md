# ICT461_Web_Systems_Course_Work
I built this web app for the Course ICT 461 Web Systems in my Fourth Year
<<<<<<< HEAD

# **Database Structure**
### Tables:

1. Users:
    - UserID (Primary Key)
    - Username
    - Password (Hashed)
    - Email
    - First Name
    - Last Name
    - Contact Number
    - Address (Optional)
    - Role (0 for ordinary user, 1 for farmer, 2 for admin)

2. AppleVarieties:
    - VarietyID (Primary Key)
    - VarietyName
    - Description
    - Availability (Boolean: true for available, false for sold out)
    - ImageURL (Link to Image)

3. InterestRequests:
    - RequestID (Primary Key)
    - UserID (Foreign Key referencing Users)
    - VarietyID (Foreign Key referencing AppleVarieties)
    - Timestamp (Date and Time of Interest)

4. SalesHistory:
    - SaleID (Primary Key)
    - UserID (Foreign Key referencing Users)
    - VarietyID (Foreign Key referencing AppleVarieties)
    - Quantity (in kilos)
    - AmountPaid
    - Timestamp (Date and Time of Sale)


### Relationships:

- Users and InterestRequests have a one-to-many relationship (one user can make multiple interest requests).
- Users and SalesHistory have a one-to-many relationship (one user can have multiple sales records).
- AppleVarieties and InterestRequests have a one-to-many relationship (one variety can have multiple interest requests).
- AppleVarieties and SalesHistory have a one-to-many relationship (one variety can have multiple sales records).


### Indexes:

- UserID, VarietyID, and RequestID should be indexed for faster retrieval.

### Considerations:

- Implement proper referential integrity constraints (foreign key constraints) to ensure data integrity.
- Use appropriate data types (e.g., VARCHAR for text, INT for numerical values, DATETIME for timestamps).
- Apply normalization techniques to minimize redundancy and improve database efficiency.

=======
>>>>>>> origin/master
