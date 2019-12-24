<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/107c56b88c.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container pt-4 px-5">
            <h1 class="mb-2">Explore the GitHub Sponsors community</h1>
            <h4 class="mb-4 text-muted">Find new open source contributors to support.</h4>

            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span class="text-muted">Sponsored developers and organizations</span>

                    <button class="btn btn-outline-primary" onclick="loadSponsorships()">
                        <i class="fa fa-refresh"></i>&nbsp; Refresh
                    </button>
                </div>
                <ul class="list-group list-group-flush" data-sponsorships-partial-target>
                    <!-- Sponsorship partial gets fetched and rendered here. -->
                </ul>
            </div>
        </div>

        <script>
            function loadSponsorships() {
                fetch('/partials/sponsorships')
                    .then(response => response.text())
                    .then(html => {
                        document.querySelector('[data-sponsorships-partial-target]').innerHTML = html
                    })
            }

            loadSponsorships()
        </script>
    </body>
</html>
