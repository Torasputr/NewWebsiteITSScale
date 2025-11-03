document.addEventListener("DOMContentLoaded", function () {
    var searchInput = document.getElementById("searchInput");
    var searchResultsMobile = document.getElementById("searchResultsMobile");
    var searchResultsDesktop = document.getElementById("searchResultsDesktop");

    searchInput.addEventListener("input", function () {
        var searchText = this.value;
        if (searchText.trim().length > 0) {
            fetchSearchResults(searchText);
        } else {
            clearSearchResults();
        }
    });

    function fetchSearchResults(searchText) {
        var xhr = new XMLHttpRequest();
        xhr.open(
            "GET",
            "/search-items?q=" + encodeURIComponent(searchText),
            true
        );
        xhr.onload = function () {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                displaySearchResults(response);
            } else {
                console.error("Error fetching search results:", xhr.statusText);
            }
        };
        xhr.onerror = function () {
            console.error("Request error...");
        };
        xhr.send();
    }

    function displaySearchResults(results) {
        clearSearchResults();
        var isMobile = window.innerWidth < 768; // Bootstrap LG breakpoint
        var searchResultsDiv = isMobile
            ? searchResultsMobile
            : searchResultsDesktop;

        if (results.length > 0) {
            results.forEach(function (item) {
                var resultItem = document.createElement("div");
                resultItem.className = "search-result-item";
                resultItem.innerHTML = `
                    <a href="/produk/${item.category.alt}/${item.alt}" class="result-content px-3 py-2 d-flex align-items-center gap-3">
                        <img src="${item.image}" alt="${item.name}" style="height: 40px; width: 40px; object-fit: contain;">
                        <h6>${item.brand.name} ${item.name}</h6>
                    </a>
                `;
                searchResultsDiv.appendChild(resultItem);
            });
        } else {
            var noResults = document.createElement("p");
            noResults.textContent = "No results found";
            searchResultsDiv.appendChild(noResults);
        }
    }

    function clearSearchResults() {
        searchResultsMobile.innerHTML = "";
        searchResultsDesktop.innerHTML = "";
    }
});
