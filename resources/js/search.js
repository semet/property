import * as $ from "jquery";
//
const element = $("#sorting-type");
const urlParams = new URLSearchParams(window.location.search);
element.change((e) => {
    window.location.href = route("search-properties", {
        status: urlParams.get("status"),
        type: urlParams.get("type"),
        location: urlParams.get("location"),
        sort_by: e.target.value,
    });
});
//
$("#list-sorting").change((e) => {
    $("#filter-form").submit();
});
//
const location = $("#location");

if (location.val() === "") {
    $("#search-btn").prop("disabled", true);
}
location.change((e) => {
    if (e.target.value !== "") {
        $("#search-btn").prop("disabled", false);
    } else {
        $("#search-btn").prop("disabled", true);
    }
});
