const baseUrl = 'http://localhost/shikhboamra';

const routes = {
    serveExamQuestion: ((exam_id, page) => `${baseUrl}/api/student/exam_page/load_question/${exam_id}?page=${page}`),
    submitAnswer: `${baseUrl}/api/student/exam/submit`
}

const get = async (url) => {   
    const response = await fetch(url, {
        headers: {
            'Accept': 'application/json'
        }
    });
    const data = response.json()
    return data
}
const post = async (url, postBody) => {
    const response = await fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        },
        body: JSON.stringify(postBody)
    });
    const data = response.json()
    return data
}