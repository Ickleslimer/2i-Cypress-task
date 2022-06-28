describe('Web form data entry test', () => {
  it('Enters the correct data into the form and clicks submit', () => {
    cy.visit('http://webdev.edinburghcollege.ac.uk/~HNCSOFTSA5/CypressTask/webform.php')
    const filePath = '../downloads/generatedBy_react-csv.json'
     cy.fixture(filePath).then((generatedData)=>{
      cy.get('[name="first_name"]').type(generatedData.firstName)
      cy.get('[name="last_name"]').type(generatedData.lastName)
      cy.get('[name="email"]').type(generatedData.email)
      cy.get('[name="age"]').type(generatedData.age)
      cy.get('[name="address"]').type(generatedData.address)
      cy.get('[name="phone"]').type(generatedData.phoneNo)
      cy.get('[type="submit"]').click()
      //Enters data from the JSON into the fields of the webform and clicks the submit button.
      })
    })
  })