const baseUrl = 'http://localhost/shikhboamra';

const routes = {
    serveExamQuestion: ((exam_id, page) => `${baseUrl}/api/student/exam_page/load_question/${exam_id}?page=${page}`)
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