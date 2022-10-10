import LeftSideBar from "./LeftSideBar";
import RightContent from "./RightContent";
import {useState} from "react"

function Instructor() {
  const [section, setSection] = useState("");
  return (
    <div className="page">
      <LeftSideBar section={section} setSection = {setSection} />
      <RightContent setSection = {setSection} />
      <div></div>
    </div>
  );
}

export default Instructor;
