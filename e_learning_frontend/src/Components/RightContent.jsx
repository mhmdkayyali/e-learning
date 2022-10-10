import Table from "./Table";
import Button from "./Button";
import Input from "./Input";
import { useState } from "react";

const first = "Crn";
const second = "Course name";
const third = "Instructor";
const fourth = "Time";

function RightContent(section) {
    const temp1 = false
  return (
    <>
      <div className="right-content">
        <div className="first-section">
          <p>Admin</p>
          <div className="add-button-container">
            <Button
              onClick={()=>{temp1 = true}}
              options={"Add"}
            />
          </div>
        </div>
        {section === "Courses" && (
          <div className="inputs">
            <Input input_options={first} />
            <Input input_options={second} />
            <Input input_options={third} />
            <Input input_options={fourth} />
            <div className="submit-button-container">
              <Button options={"Submit"} />
            </div>
          </div>
        )}
        <div>
          <Table />
        </div>
      </div>
    </>
  );
}

export default RightContent;
