describe('Data generator test', () => {
  it('Selects the correct options', () => {
    cy.visit('http://localhost:3000/')

    cy.get('#btn-resCSV-data').click()

    cy.get('#select-key-drop-basic').select('First Name').should('have.value', 'firstName')
    cy.get('#btn-add-prop').click()

    cy.get('#select-key-drop-basic').select('Last Name').should('have.value', 'lastName')
    cy.get('#btn-add-prop').click()

    cy.get('#select-key-drop-basic').select('Email').should('have.value', 'email')
    cy.get('#btn-add-prop').click()

    cy.get('#select-key-drop-basic').select('Age').should('have.value', 'age')
    cy.get('#select-key-drop-age').select('22-30').should('have.value', '22-30')
    cy.get('#btn-add-prop').click()

    cy.get('#select-key-drop-basic').select('Address').should('have.value', 'address')
    cy.get('#btn-add-prop').click()

    cy.get('#select-key-drop-basic').select('Phone No').should('have.value', 'phoneNo')
    cy.get('#btn-add-prop').click()

    cy.get('#entries-input').type('1')
    
    cy.get('#btn-get-data').click()
    cy.get('#btn-arr-data').click()
    cy.get('#btn-download-data').click()
    
    
  })

  
})