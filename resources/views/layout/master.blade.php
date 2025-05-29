<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Health Assessment</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"
      type="text/javascript"
    ></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/3.0.1/jspdf.umd.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script> -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <style>
      .step-section{
        page-break-after: always;
      }
      body {
        background-color: #f4f6f9;
      }
      .form-container {
        max-width: 700px;
        margin: 40px auto;
        background: white;
        padding: 30px;
        border-radius: 10px;
      }
      .form-section {
        margin-top: 30px;
      }
   
      .form-check-inline {
        margin-right: 15px;
      }

      .examination-grid {
        display: grid;
        grid-template-columns: repeat(
          auto-fit,
          minmax(100px, 1fr)
        ); 
        gap: 10px;
        margin-top: 10px;
      }

      .mass-tenderness-group {
        display: flex;
        flex-wrap: wrap; 
        gap: 20px;
        margin-top: 10px;
      }
      .mass-tenderness-group > div {
        flex: 1; 
        min-width: 200px; 
      }

      .pr-exam-hernias {
        display: grid;
        grid-template-columns: repeat(
          auto-fit,
          minmax(150px, 1fr)
        );
        gap: 10px;
        margin-top: 10px;
      }

      .abdominal-drawing {
        border: 1px solid #ccc;
        padding: 10px;
        text-align: center; 
        margin-top: 10px;
      }
      .abdominal-drawing img {
        max-width: 100%; 
        height: auto;
      }
    </style>
  </head>

  <body>
    @yield('contents')
  </body>
</html>