import axios from "axios"

export default axios.create({
    baseURL: 'http://localhost/api',
    headers: {
        'Content-Type': 'application/json; charset=utf-8',
        'Accept': 'application/json'
    }
})
