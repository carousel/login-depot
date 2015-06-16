#TODO
    -send email when company is registered

#login form:
    -company
    -worker
    -admin

#register type
    -form
        -company
    -internal
        -admin
        -worker

#register condition
        -role

#register form
    -company

#events


#COMMUNICATION WITH CUSTOMER
    - profile info
    - pickup info (city,state,zip)
    - dropoff info (city,state,zip)
    - vehicle info
        - year,make,model,condition 
    - carrier type

#QUOTE FORM
    - changes
    - autocomplete (what and from where to pull data)
    - after submit:
        - where to dispatch input data (central dispatch, check price, database ...)?

#RESOURCES
    -company ( company controller)
        -worker (company controller)
        -quote,customer (quote controller)
        -order (order controller)

#LOGIC FLOW
    -create quote for new customer (save in db)
    -send info to customer with link to new created quote (by email)
    -quote is stored in db
    -invite customer to enhance quote and place order
    -see notification with status, view/edit customer order

#TODO
    -compare prices ?
    -store form data
        - orders table migrations
    -view/modify order (with status)

#STATUS
    -"Saved"-> quote is saved in the system but no email has been sent to the customer.
    -"Pending"-> quote has been sent to customer and waits for his approval 
    -"Accepted"-> customer has accepted the terms and conditions and filled out the form
    -"Posted"-> the vehicles are posted on centralDispatch or uShip
    -"Closed"-> the job is now done and closed 
    -"Canceled"-> the carrier canceled the job manually

