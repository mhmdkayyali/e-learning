import Button from "./Button";

const first = "Courses";
const second = "Instructors";
const third = "Students";
const hii = "Admin";

function LeftSideBar({section, setSection }) {
  return (
    <>
      <div className="side-bar-container">
        <p className="header">{hii}</p>
        <div className="side-bar-buttons">
          <Button
            onClick={() => {
              setSection(first);
            }}
            options={first}
          />
          <Button
            onClick={() => {
              setSection(second);
            }}
            options={second}
          />
          <Button
            onClick={() => {
              setSection(third);
            }}
            options={third}
          />
        </div>
      </div>
    </>
  );
}

export default LeftSideBar;
