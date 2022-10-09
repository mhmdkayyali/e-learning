import Button from "./Button";

const first = "Courses";
const second = "Instructors";
const third = "Students";
const hii = "Admin";

function LeftSideBar() {
  return (
    <>
      <div className="side-bar-container">
        <p className="header">{hii}</p>
        <div className="side-bar-buttons">
          <Button options={first} />
          <Button options={second} />
          <Button options={third} />
        </div>
      </div>
    </>
  );
}

export default LeftSideBar;
