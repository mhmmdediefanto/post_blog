let title = document.getElementById("title");
let slug = document.getElementById("slug");

title.addEventListener("change", function () {
    fetch("/dashboard/category/checkSlug?title=" + title.value)
        .then((response) => response.json())
        .then((data) => (slug.value = data.slug));
});
