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

#TODO
    -clone
        -make
        -model
        -condition
        -quantity
    -create quote
    -on customer link, create form
    -store form data

