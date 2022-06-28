describe('CSV to JSON conversion', () => {
  it('Uploads the JSON to the dropbox', () => {
    cy.visit('https://data.page/csv/json')
    const filePath = '../downloads/generatedBy_react-csv.csv'
    cy.get('#fileupload').attachFile(filePath);
    cy.get('#download-link').click()
  })
})