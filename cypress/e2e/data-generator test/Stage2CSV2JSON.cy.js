describe('CSV to JSON conversion', () => {
  it('Uploads the JSON to the dropbox', () => {
    cy.visit('https://data.page/csv/json')
    const filePath = '../downloads/generatedBy_react-csv.csv'
    cy.get('#fileupload').attachFile(filePath);
    cy.get('#download-link').click()
    //Attaches a file to the dropbox on the website and clicks the download button to download the converted JSON.
  })
})