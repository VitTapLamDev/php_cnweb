const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const geography = [
  {
    question: "Câu 1: Nước ta nằm ở vị trí:",
    answerA:
      "A. rìa phía Đông của bán đảo Đông Dương",
    answerB:
      "B. rìa phía Tây của bán đảo Đông Dương.",
    answerC:
      "C. trung tâm châu Á",
    answerD:
      "D. phía đông Đông Nam Á",
  },
  {
    question: "Câu 2: Vị trí địa lí của nước ta là:",
    answerA:
      "A. nằm ở phía Đông bán đảo Đông Dương, gần trung tâm khu vực Đông Nam Á",
    answerB:
      "B. nằm ở phía Tây bán đảo Đông Dương, gần trung tâm khu vực Đông Nam Á",
    answerC:
      "C. nằm ở phía Đông bán đảo Đông Dương, gần trung tâm khu vực châu Á",
    answerD:
      "D. nằm ở phía Tây bán đảo Đông Dương, gần trung tâm khu vực châu Á",
  },
  {
    question: "Câu 3: “ Đâu không phải là đặc điểm của vị trí địa lí nước ta:",
    answerA:
      "A. vừa gắn liền với lục địa Á – Âu, vừa tiếp giáp với Thái Bình Dương.",
    answerB:
      "B. nằm trên các tuyến đường giao thông hàng hải, đường bộ, đường hàng không quốc",
    answerC:
      "C. trong khu vực có nền kinh tế năng động của thế giới.",
    answerD:
      "D. nằm ở trung tâm của châu Á.",
  }
];

const history = [
  {
    question: "Câu 1: Nguyên thủ những nước nào sau đây tham dự Hội nghị Ianta (2/1945)?",
    answerA:
      "A. Anh, Pháp, Mĩ.",
    answerB:
      "B. Anh, Mĩ, Liên Xô.",
    answerC:
      "C. Anh, Pháp, Đức.",
    answerD:
      "D. Mĩ, Liên Xô, Trung Quốc.",
  },
  {
    question: "Câu 2: Theo quyết định của Hội nghị Ianta (2/1945), khu vực nào dưới đây thuộc phạm vi ảnh hưởng của Liên Xô?",
    answerA:
      "A. Đông Âu",
    answerB:
      "B. Đông Nam Á",
    answerC:
      "C. Tây Âu",
    answerD:
      "D.  Tây Đức",
  },
  {
    question: "Câu 3: Hiến chương Liên hợp quốc được thông qua tại Hội nghị nào ?",
    answerA:
      "A. Hội nghị Ianta (1945).",
    answerB:
      "B. Hội nghị Xan Phranxixcô (1946).",
    answerC:
      "C. Hội nghị Pốtxđam (1946).",
    answerD:
      "D. Hội nghị Pari (1973).",
  },
];

const render = (exams) => {
  const content = exams.map((exam, index) => {
    console.log(exam.question);
    return `
            <div class="question">${exam.question}</div>
            <div class="row">
                <div class="col">
                    <input type="radio" name="answer + ${index}" id="answerA"></input>
                    <label for="answerA">${exam.answerA}</label>
                </div>
                <div class="col">
                    <input type="radio" name="answer + ${index}" id="answerB"></input>
                    <label for="answerB">${exam.answerB}</label>
                </div>
                <div class="col">
                    <input type="radio" name="answer + ${index}" id="answerC"></input>
                    <label for="answerC">${exam.answerC}</label>
                </div>
                <div class="col">
                    <input type="radio" name="answer + ${index}" id="answerD"></input>
                    <label for="answerD">${exam.answerD}</label>
                </div>
            </div>
            </div>
        `;
  });
  content.push('<button class="button">Nộp bài</button>')
  $(".content").innerHTML = content.join("");
};

const handleExam = (examName) => {
    if(examName === 'dia') render(geography)
    if(examName === 'su') render(history)
};