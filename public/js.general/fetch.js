let fetch_query = (formData, entity, operation) => {
    return fetch(`${http_domain}services/${entity}/${operation}`, {
        method: "POST",
        headers: new Headers().append("Accept", "application/json"),
        body: formData,
    })
        .then((res) => res.json())
        .then((res) => res);
};
