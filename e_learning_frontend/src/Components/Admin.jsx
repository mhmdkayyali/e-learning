import LeftSideBar from "./LeftSideBar";
import RightContent from "./RightContent";
import {useState} from "react"

function Admin() {
  const [section, setSection] = useState("");
  return (
    <div className="admin">
      <LeftSideBar section={section} setSection = {setSection} />
      <RightContent setSection = {setSection} />
      <div></div>
    </div>
  );
}

export default Admin;
