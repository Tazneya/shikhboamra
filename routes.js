const baseUrl = 'http://localhost/shikhboamra';

const routes = {
    serveExamQuestion: ((exam_id, page) => `${baseUrl}/api/student/exam_page/load_question/${exam_id}?page=${page}`),
    submitAnswer: `${baseUrl}/api/student/exam/submit`,
    createCourseReview: `${baseUrl}/api/student/course/review/create`,
    getRatingSummary: (course_id => `${baseUrl}/api/student/course/rating_summary/${course_id}`),
    getReviews: (course_id => `${baseUrl}/api/student/course/reviews/get/${course_id}`)
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